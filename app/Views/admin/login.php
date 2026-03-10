<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | AMBER STUDIO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="bg-gray-800 p-10 rounded-xl shadow-2xl w-full max-w-md border border-gray-700">
        <h1 class="text-3xl font-bold mb-8 text-center tracking-tighter">LOGRAVA ADMIN</h1>
        
        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-500/10 border border-red-500 text-red-500 p-4 rounded mb-6 text-sm">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="/admin/login" method="POST" class="space-y-6">
            <?= csrf_field() ?>
            <div>
                <label class="block text-xs uppercase tracking-widest text-gray-400 mb-2">Username</label>
                <input type="text" name="username" required 
                       class="w-full bg-gray-900 border border-gray-700 rounded p-3 focus:outline-none focus:border-white transition-colors">
            </div>
            <div>
                <label class="block text-xs uppercase tracking-widest text-gray-400 mb-2">Password</label>
                <input type="password" name="password" required 
                       class="w-full bg-gray-900 border border-gray-700 rounded p-3 focus:outline-none focus:border-white transition-colors">
            </div>
            <button type="submit" 
                    class="w-full bg-white text-black font-bold py-3 rounded hover:bg-gray-200 transition-colors uppercase tracking-widest text-xs">
                Login
            </button>
        </form>
    </div>
</body>
</html>
