<div class="main-container">
    <div class="container">
<h1>Ask a Question</h1>
    <form method="POST" action="./server/requests.php">
        <!-- Title Input -->
        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Enter the title of your question" required>

        <!-- Description Textarea -->
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="5" placeholder="Describe your question in detail" required></textarea>

        <!-- Category Selector -->
        <label for="category">Category</label>
        <?php
            include('category.php');    
        ?>

        <!-- Submit Button -->
        <button type="submit" class="btn" name="submit">Submit Question</button>
    </form>
    </div>
    </div>