<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-block bg-indigo-500 hover:bg-indigo-600 text-white whitespace-nowrap']) }}>
    {{ $slot }}
</button>
