<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<style>
    body {
        background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    .edit-message-form {
        max-width: 500px;
        margin: 50px auto;
        padding: 35px 40px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
        border: 1px solid #e3e6f0;
        transition: box-shadow 0.3s;
    }
    .edit-message-form:hover {
        box-shadow: 0 12px 40px rgba(31, 38, 135, 0.18);
    }
    .edit-message-form h2 {
        text-align: center;
        margin-bottom: 28px;
        color: #3a3a5a;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .edit-message-form .mb-3 {
        margin-bottom: 22px;
    }
    .edit-message-form label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 7px;
        display: block;
        letter-spacing: 0.5px;
    }
    .edit-message-form input[type="text"],
    .edit-message-form input[type="date"],
    .edit-message-form textarea {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #d1d9e6;
        border-radius: 6px;
        background: #f7fafd;
        font-size: 1rem;
        transition: border-color 0.2s;
        box-sizing: border-box;
        resize: none;
    }
    .edit-message-form input:focus,
    .edit-message-form textarea:focus {
        border-color: #6c63ff;
        outline: none;
        background: #f0f4ff;
    }
    .edit-message-form textarea {
        min-height: 90px;
        max-height: 200px;
    }
    .edit-message-form .btn {
        min-width: 110px;
        padding: 9px 0;
        border-radius: 6px;
        font-weight: 600;
        font-size: 1rem;
        letter-spacing: 0.5px;
        transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        box-shadow: 0 2px 8px rgba(108, 99, 255, 0.08);
    }
    .edit-message-form .btn-primary {
        background: linear-gradient(90deg, #6c63ff 0%, #48c6ef 100%);
        border: none;
        color: #fff;
    }
    .edit-message-form .btn-primary:hover {
        background: linear-gradient(90deg, #48c6ef 0%, #6c63ff 100%);
        color: #fff;
    }
    .edit-message-form .btn-secondary {
        background: #f1f3f6;
        color: #6c63ff;
        border: 1px solid #d1d9e6;
        margin-left: 12px;
    }
    .edit-message-form .btn-secondary:hover {
        background: #e0eafc;
        color: #3a3a5a;
    }
</style>

<div class="edit-message-form">
    <h2>Edit Message</h2>

    <form method="post" action="/messages/update/<?= $message['id'] ?>">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?= $message['title'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" required><?= $message['content'] ?></textarea>
        </div>
        <div class="mb-3">
            <label>Send Date</label>
            <input type="date" name="send_date" class="form-control" value="<?= $message['send_date'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/messages" class="btn btn-secondary">Back</a>
    </form>
</div>

<?= $this->endSection() ?>
