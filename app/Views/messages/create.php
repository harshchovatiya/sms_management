<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<style>
    body {
        background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    .message-form-container {
        max-width: 500px;
        margin: 40px auto;
        padding: 35px 30px 30px 30px;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 6px 32px rgba(44, 62, 80, 0.13);
        border: 1px solid #e3e6f0;
        transition: box-shadow 0.2s;
    }
    .message-form-container:hover {
        box-shadow: 0 10px 40px rgba(44, 62, 80, 0.18);
    }
    .message-form-container h2 {
        text-align: center;
        margin-bottom: 28px;
        color: #2d3a4b;
        letter-spacing: 1px;
        font-weight: 600;
    }
    .message-form-container label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 6px;
        display: block;
    }
    .message-form-container .form-control {
        margin-bottom: 18px;
        border-radius: 6px;
        border: 1px solid #d1d9e6;
        box-shadow: none;
        transition: border-color 0.2s;
        font-size: 1rem;
    }
    .message-form-container .form-control:focus {
        border-color: #6c63ff;
        box-shadow: 0 0 0 2px rgba(108,99,255,0.08);
    }
    .message-form-container textarea.form-control {
        min-height: 90px;
        resize: vertical;
    }
    .message-form-container .btn {
        min-width: 110px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 1rem;
        transition: background 0.18s, color 0.18s;
    }
    .message-form-container .btn-success {
        background: linear-gradient(90deg, #6c63ff 0%, #48c6ef 100%);
        border: none;
        color: #fff;
        box-shadow: 0 2px 8px rgba(76, 110, 245, 0.13);
    }
    .message-form-container .btn-success:hover {
        background: linear-gradient(90deg, #48c6ef 0%, #6c63ff 100%);
        color: #fff;
    }
    .message-form-container .btn-secondary {
        background: #f1f3f7;
        color: #6c63ff;
        border: none;
    }
    .message-form-container .btn-secondary:hover {
        background: #e0eafc;
        color: #2d3a4b;
    }
    .message-form-container .btn + .btn {
        margin-left: 12px;
    }
</style>

<div class="message-form-container">
    <h2>Add New Message</h2>

    <form method="post" action="/messages/store">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Send Date</label>
            <input type="date" name="send_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
        <a href="/messages" class="btn btn-secondary">Back</a>
    </form>
</div>

<?= $this->endSection() ?>