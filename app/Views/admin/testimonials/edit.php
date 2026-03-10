<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
<div class="max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-10">
        <h1 class="text-3xl font-bold text-gray-900">Edit Testimonial</h1>
        <a href="/admin/testimonials" class="text-sm font-medium text-gray-500 hover:text-black transition-colors">Back to Testimonials</a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
        <form action="/admin/testimonials/update/<?= $testimonial['id'] ?>" method="POST" class="space-y-6">
            <?= csrf_field() ?>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Client Name</label>
                <input type="text" name="client_name" required value="<?= $testimonial['client_name'] ?>"
                       class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Profile Image URL</label>
                <input type="text" name="image" required value="<?= $testimonial['image'] ?>"
                       class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Testimonial Content</label>
                <textarea name="content" rows="4" required
                          class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all"><?= $testimonial['content'] ?></textarea>
            </div>
            <div class="pt-6">
                <button type="submit" 
                        class="w-full bg-black text-white font-bold py-4 rounded-lg hover:bg-gray-800 transition-colors uppercase tracking-widest text-xs">
                    Update Testimonial
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
