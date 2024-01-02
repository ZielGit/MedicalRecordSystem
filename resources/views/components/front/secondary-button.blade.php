<button {{ $attributes->merge(['type' => 'button', 'class' => 'px-3 py-2.5 text-sm font-medium text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 hover:text-gray-900 focus:outline-none']) }}>
    {{ $slot }}
</button>
