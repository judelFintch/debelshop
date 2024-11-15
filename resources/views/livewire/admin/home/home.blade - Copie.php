<div class="p-6 space-y-6">
    <!-- Title -->
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Welcome to the Dashboard</h2>
    
    <!-- Example Dashboard Content: Cards with stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1: Total Users -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Total Users</h3>
            <p class="text-3xl font-bold text-gray-700">500</p>
            <p class="text-sm text-gray-500">Users currently registered in the system.</p>
        </div>
    
        <!-- Card 2: Total Sales -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Total Sales</h3>
            <p class="text-3xl font-bold text-gray-700">$12,000</p>
            <p class="text-sm text-gray-500">Total sales revenue so far this month.</p>
        </div>
    
        <!-- Card 3: Pending Orders -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Pending Orders</h3>
            <p class="text-3xl font-bold text-gray-700">12</p>
            <p class="text-sm text-gray-500">Orders that are yet to be processed.</p>
        </div>
    </div>
    
    <!-- Livewire component for Orders -->
    <div class="bg-white p-6 rounded-xl shadow-md mt-6">
        @livewire('admin.orders.orderlist')
    </div>
</div>
