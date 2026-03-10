<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
<div class="flex justify-between items-center mb-10">
    <h1 class="text-3xl font-bold text-gray-900">Projects</h1>
    <a href="/admin/projects/create" class="bg-black text-white px-6 py-2 rounded text-sm font-medium hover:bg-gray-800 transition-colors">Add Project</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-gray-500">Project</th>
                <th class="px-6 py-4 text-center text-xs font-bold uppercase tracking-widest text-gray-500">Status</th>
                <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-widest text-gray-500">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td class="px-6 py-4">
                        <img src="<?= $project['thumbnail'] ?>" class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-gray-900"><?= $project['title'] ?></div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-widest"><?= $project['category'] ?></div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <?php if ($project['is_featured']): ?>
                            <span class="px-2 py-1 text-[8px] font-black uppercase tracking-tighter bg-black text-white rounded">Featured</span>
                        <?php else: ?>
                            <span class="px-2 py-1 text-[8px] font-black uppercase tracking-tighter bg-gray-100 text-gray-400 rounded">Hidden</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 text-right space-x-4">
                        <a href="/admin/projects/edit/<?= $project['id'] ?>" class="text-sm font-medium text-black hover:underline">Edit</a>
                        <a href="/admin/projects/delete/<?= $project['id'] ?>" class="text-sm font-medium text-red-600 hover:underline" onclick="return confirm('Delete this project?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
