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
    public function services(Request $request)
    {
        $query = Service::latest();

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $services = $query->paginate(10);
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
    public function customers(Request $request)
    {
        $query = User::where('role', 'customer')->latest();

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $customers = $query->paginate(20);
        
        return view('admin.customers.index', compact('customers'));
    }

    public function createCustomer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $validated['role'] = 'customer';

        User::create($validated);

        return redirect()->route('admin.customers')->with('success', 'Customer created successfully!');
    }

    public function updateCustomer(Request $request, User $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $customer->id,
            'password' => 'nullable|min:8',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
        ];

        if (!empty($validated['password'])) {
            $data['password'] = bcrypt($validated['password']);
        }

        $customer->update($data);

        return redirect()->route('admin.customers')->with('success', 'Customer updated successfully!');
    }

    public function deleteCustomer(User $customer)
    {
        $customer->delete();
        return redirect()->route('admin.customers')->with('success', 'Customer deleted successfully!');
    }

    // Admins
    public function admins(Request $request)
    {
        $query = User::where('role', 'admin')->latest();

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $admins = $query->paginate(20);
        
        return view('admin.admins.index', compact('admins'));
    }

    public function createAdmin(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        if (!str_ends_with($validated['email'], '@motorcare.com')) {
            return redirect()->back()->withErrors(['email' => 'Admin emails must end with @motorcare.com'])->withInput();
        }

        $validated['password'] = bcrypt($validated['password']);
        $validated['role'] = 'admin';

        User::create($validated);

        return redirect()->route('admin.admins')->with('success', 'Admin created successfully!');
    }

    public function updateAdmin(Request $request, User $admin)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password' => 'nullable|min:8',
        ]);

        if (!str_ends_with($validated['email'], '@motorcare.com')) {
            return redirect()->back()->withErrors(['email' => 'Admin emails must end with @motorcare.com'])->withInput();
        }

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
        ];

        if (!empty($validated['password'])) {
            $data['password'] = bcrypt($validated['password']);
        }

        $admin->update($data);

        return redirect()->route('admin.admins')->with('success', 'Admin updated successfully!');
    }

    public function deleteAdmin(User $admin)
    {
        // Don't allow deleting self
        if (auth()->id() === $admin->id) {
            return redirect()->route('admin.admins')->with('error', 'You cannot delete yourself!');
        }

        $admin->delete();
        return redirect()->route('admin.admins')->with('success', 'Admin deleted successfully!');
    }
}
