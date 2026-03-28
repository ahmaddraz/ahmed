<h1>تعديل الكتاب</h1>
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $book->title }}" required><br><br>
    <input type="text" name="author" value="{{ $book->author }}" required><br><br>
    <input type="number" name="year_published" value="{{ $book->year_published }}" required><br><br>
    <button type="submit">حفظ التعديلات</button>
</form>
