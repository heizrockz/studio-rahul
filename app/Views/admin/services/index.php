<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
<div class="flex justify-between items-center mb-10">
    <h1 class="text-3xl font-bold text-gray-900">Services</h1>
    <a href="/admin/services/create" class="bg-black text-white px-6 py-2 rounded text-sm font-medium hover:bg-gray-800 transition-colors">Add Service</a>
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
                <th class="px-6 py-4 text-xs font-semibold uppercase tracking-widest text-gray-500">Title</th>
                <th class="px-6 py-4 text-xs font-semibold uppercase tracking-widest text-gray-500">Description</th>
                <th class="px-6 py-4 text-xs font-semibold uppercase tracking-widest text-gray-500 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php foreach ($services as $service): ?>
                <tr>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900"><?= $service['title'] ?></td>
                    <td class="px-6 py-4 text-sm text-gray-500"><?= substr($service['description'], 0, 100) ?>...</td>
                    <td class="px-6 py-4 text-right space-x-4">
                        <a href="/admin/services/edit/<?= $service['id'] ?>" class="text-sm font-medium text-black hover:underline">Edit</a>
                        <a href="/admin/services/delete/<?= $service['id'] ?>" class="text-sm font-medium text-red-600 hover:underline" onclick="return confirm('Delete this service?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
