<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="logo-login" style="max-width: 20%">
        {{-- {{ $logo }} --}}
        <img src="images/logo/footer-logo.png" style="margin: auto; max-width: 104px;">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
