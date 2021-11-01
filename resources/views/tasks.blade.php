<?php require '../resources/layout/html_header.blade.php' ?>
<?php require '../resources/layout/nav.blade.php' ?>
<div class="min-h-full">
<header>
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">
                    Tasks
                </h1>
            </div>
        </header>
        <main>
            <h1><?=$greeting;?></h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                </tr>
                <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?=$task->id;?></td>
                    <td><?=$task->title;?></td>
                    <td><?=$task->description;?></td>
                    <td><?=$task->completed;?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </main>
</header>
</div>
<?php require '../resources/layout/footer.blade.php' ?>