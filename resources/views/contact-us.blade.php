<x-app-layout>
  
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h5 class="text-center text-lg text-lime-900">Contact Us</h5>
                    <form method="POST" action="/contact" class="space-y-6 bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        @csrf
                        <div class="flex flex-col">
                            <label for="name" class="mb-2 font-semibold text-gray-800 dark:text-gray-200">Name:</label>
                            <input type="text" id="name" name="name" required class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="email" class="mb-2 font-semibold text-gray-800 dark:text-gray-200">Email:</label>
                            <input type="email" id="email" name="email" required class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="message" class="mb-2 font-semibold text-gray-800 dark:text-gray-200">Message:</label>
                            <textarea id="message" name="message" required class="border border-gray-300 dark:border-gray-600 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-100"></textarea>
                        </div>
                        <div>
                        <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700">
                            Send
                        </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
    </div>
    
   
</x-app-layout>
