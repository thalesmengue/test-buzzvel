<div>
    <div class="py-14">
        <div class="flex justify-center text-2xl">
            Hello {{ $user->name }} 👋
        </div>
        <div class="flex justify-center mt-8 text-2xl">
            Scan the QR Code below to access your profile 👇
        </div>
        <div class="flex justify-center mt-8">
            <img src="data:image/png;base64, {!! $user->qrcode !!}" alt="qrcode">
        </div>
    </div>
</div>
