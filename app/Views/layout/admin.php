<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | AMBER STUDIO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-6">
                <h1 class="text-xl font-bold tracking-tighter">AMBER ADMIN</h1>
            </div>
            <nav class="mt-6">
                <a href="/admin/projects" class="flex items-center px-6 py-3 bg-gray-800 text-white">
                    <span class="text-sm font-medium">Projects</span>
                </a>
                <a href="/admin/settings" class="flex items-center px-6 py-3 text-gray-400 hover:bg-gray-800 hover:text-white transition-colors">
                    <span class="text-sm font-medium">Settings</span>
                </a>
                <a href="/admin/logout" class="flex items-center px-6 py-3 text-red-400 hover:bg-gray-800 transition-colors mt-auto">
                    <span class="text-sm font-medium">Logout</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-10">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>
</html>
