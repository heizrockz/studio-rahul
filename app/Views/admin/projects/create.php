<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>
<div class="max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-10">
        <h1 class="text-3xl font-bold text-gray-900">Add New Project</h1>
        <a href="/admin/projects" class="text-sm font-medium text-gray-500 hover:text-black transition-colors">Back to Projects</a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
        <form action="/admin/projects/store" method="POST" class="space-y-6">
            <?= csrf_field() ?>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Project Title</label>
                <input type="text" name="title" required placeholder="e.g. OF EARTH"
                       class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                    <input type="text" name="category" required placeholder="e.g. FILMS"
                           class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="0"
                           class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
                </div>
            </div>
            <div class="flex items-center space-x-3 bg-gray-50 p-4 rounded-lg border border-gray-100">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" checked
                       class="w-5 h-5 rounded border-gray-300 text-black focus:ring-black">
                <label for="is_featured" class="text-sm font-medium text-gray-700 uppercase tracking-widest">Show on Homepage</label>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Thumbnail URL</label>
                <input type="text" name="thumbnail" required placeholder="https://unsplash.com/..."
                       class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Video URL (Optional)</label>
                <input type="text" name="video_url" placeholder="https://..."
                       class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" rows="4" 
                          class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-black/5 focus:border-black transition-all"></textarea>
            </div>
            <div class="pt-6">
                <button type="submit" 
                        class="w-full bg-black text-white font-bold py-4 rounded-lg hover:bg-gray-800 transition-colors uppercase tracking-widest text-xs">
                    Save Project
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
