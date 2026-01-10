<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $stats = [
            'total_bookings' => Booking::count(),
            'pending_bookings' => Booking::where('status', 'pending')->count(),
            'total_customers' => User::where('role', 'customer')->count(),
            'total_revenue' => Booking::where('status', 'completed')->count() * 15000, // Placeholder calculation
        ];

        $recentBookings = Booking::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentBookings'));
    }

    // Services
    public function services()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function storeService(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'icon' => 'nullable|string',
            'estimated_time' => 'nullable|string',
        ]);

        Service::create($validated);

        return redirect()->route('admin.services')->with('success', 'Service created successfully!');
    }

    public function updateService(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'icon' => 'nullable|string',
            'estimated_time' => 'nullable|string',
        ]);

        $service->update($validated);

        return redirect()->route('admin.services')->with('success', 'Service updated successfully!');
    }

    public function deleteService(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services')->with('success', 'Service deleted successfully!');
    }

    // Bookings
    public function bookings(Request $request)
    {
        $query = Booking::with('user')->latest();

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('customer_name', 'like', "%{$search}%")
                  ->orWhere('customer_email', 'like', "%{$search}%")
                  ->orWhere('vehicle_make', 'like', "%{$search}%")
                  ->orWhere('vehicle_model', 'like', "%{$search}%")
                  ->orWhere('service_type', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        $bookings = $query->paginate(20);
        
        return view('admin.bookings.index', compact('bookings'));
    }

    public function updateBookingStatus(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        $booking->update($validated);

        return redirect()->route('admin.bookings')->with('success', 'Booking status updated!');
    }

    public function createBooking(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'vehicle_make' => 'nullable|string|max:255',
            'vehicle_model' => 'nullable|string|max:255',
            'service_type' => 'required|string|max:255',
            'service_date' => 'required|date',
            'service_time' => 'required',
            'additional_notes' => 'nullable|string',
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        Booking::create($validated);

        return redirect()->route('admin.bookings')->with('success', 'Booking created successfully!');
    }

    // Customers
    public function customers()
    {
        $customers = User::where('role', 'customer')->latest()->paginate(20);
        return view('admin.customers.index', compact('customers'));
    }
}
