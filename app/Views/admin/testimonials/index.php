<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
<div class="flex justify-between items-center mb-10">
    <h1 class="text-3xl font-bold text-gray-900">Testimonials</h1>
    <a href="/admin/testimonials/create" class="bg-black text-white px-6 py-2 rounded text-sm font-medium hover:bg-gray-800 transition-colors">Add Testimonial</a>
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
                <th class="px-6 py-4 text-xs font-semibold uppercase tracking-widest text-gray-500">Client</th>
                <th class="px-6 py-4 text-xs font-semibold uppercase tracking-widest text-gray-500">Content</th>
                <th class="px-6 py-4 text-xs font-semibold uppercase tracking-widest text-gray-500 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php foreach ($testimonials as $testimonial): ?>
                <tr>
                    <td class="px-6 py-4 font-medium text-gray-900">
                        <div class="flex items-center space-x-3">
                            <img src="<?= $testimonial['image'] ?>" class="w-8 h-8 rounded-full object-cover">
                            <span><?= $testimonial['client_name'] ?></span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500"><?= substr($testimonial['content'], 0, 100) ?>...</td>
                    <td class="px-6 py-4 text-right space-x-4">
                        <a href="/admin/testimonials/edit/<?= $testimonial['id'] ?>" class="text-sm font-medium text-black hover:underline">Edit</a>
                        <a href="/admin/testimonials/delete/<?= $testimonial['id'] ?>" class="text-sm font-medium text-red-600 hover:underline" onclick="return confirm('Delete this testimonial?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
