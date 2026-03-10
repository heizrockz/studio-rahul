<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
<div class="max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-10">
        <h1 class="text-3xl font-bold text-gray-900">Add New Service</h1>
        <a href="/admin/services" class="text-sm font-medium text-gray-500 hover:text-black transition-colors">Back to Services</a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
        <form action="/admin/services/store" method="POST" class="space-y-6">
            <?= csrf_field() ?>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Service Title</label>
                <input type="text" name="title" required placeholder="e.g. Strategy & Direction"
                       class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" rows="4" required
                          class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all"></textarea>
            </div>
            <div class="pt-6">
                <button type="submit" 
                        class="w-full bg-black text-white font-bold py-4 rounded-lg hover:bg-gray-800 transition-colors uppercase tracking-widest text-xs">
                    Save Service
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
