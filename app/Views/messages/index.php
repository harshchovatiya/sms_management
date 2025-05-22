<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Custom CSS -->
<style>
    body {
        background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
        font-family: 'Segoe UI', Arial, sans-serif;
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }
    h2 {
        margin-bottom: 28px;
        color: #1a237e;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-shadow: 0 2px 8px rgba(26,35,126,0.08);
    }
    .btn-primary {
        background: linear-gradient(90deg, #4f8cff 60%, #1e3c72 100%);
        border: none;
        color: #fff;
        font-weight: 600;
        border-radius: 6px;
        padding: 8px 22px;
        transition: background 0.2s, box-shadow 0.2s;
        box-shadow: 0 2px 12px rgba(79,140,255,0.12);
    }
    .btn-primary:hover {
        background: linear-gradient(90deg, #1e3c72 60%, #4f8cff 100%);
        box-shadow: 0 4px 18px rgba(79,140,255,0.18);
    }
    .btn-warning {
        background: linear-gradient(90deg, #ffd86f 60%, #ffab00 100%);
        border: none;
        color: #212529;
        font-weight: 600;
        border-radius: 6px;
        transition: background 0.2s, color 0.2s;
    }
    .btn-warning:hover {
        background: linear-gradient(90deg, #ffab00 60%, #ffd86f 100%);
        color: #fff;
    }
    .btn-danger {
        background: linear-gradient(90deg, #ff6a6a 60%, #d7263d 100%);
        border: none;
        color: #fff;
        font-weight: 600;
        border-radius: 6px;
        transition: background 0.2s;
    }
    .btn-danger:hover {
        background: linear-gradient(90deg, #d7263d 60%, #ff6a6a 100%);
    }
    .table {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 6px 32px rgba(44,62,80,0.10);
        margin-top: 24px;
        border-collapse: separate;
        border-spacing: 0;
    }
    .table th {
        background: linear-gradient(90deg, #e3f0ff 60%, #f7faff 100%);
        color: #1a237e;
        font-weight: 700;
        border-bottom: 2px solid #e9ecef;
        text-align: center;
        vertical-align: middle !important;
        padding: 16px 12px;
        letter-spacing: 0.5px;
    }
    .table td {
        vertical-align: middle !important;
        text-align: center;
        padding: 14px 12px;
        color: #444;
        background: #fafdff;
        font-size: 15px;
    }
    .table tr:nth-child(even) td {
        background: #f1f6fb;
    }
    .alert-success {
        margin-top: 14px;
        border-radius: 8px;
        font-weight: 600;
        background: linear-gradient(90deg, #d4edda 60%, #b7eacb 100%);
        color: #155724;
        border: 1px solid #b7eacb;
        box-shadow: 0 2px 8px rgba(52,199,89,0.08);
    }
    a.btn {
        margin-right: 6px;
        min-width: 80px;
        border-radius: 6px;
        font-size: 15px;
    }
    @media (max-width: 768px) {
        .table th, .table td {
            font-size: 13px;
            padding: 8px 4px;
        }
        h2 {
            font-size: 1.1rem;
        }
        a.btn {
            min-width: 60px;
            font-size: 12px;
        }
        .table {
            border-radius: 8px;
        }
    }
</style>

<h2>Messages</h2>

<a href="/messages/create" class="btn btn-primary mb-2">Add Message</a>

<?php if (session()->getFlashdata('status')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('status') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Send Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php $no = 1; foreach ($messages as $msg): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $msg['title'] ?></td>
            <td><?= $msg['content'] ?></td>
            <td><?= $msg['send_date'] ?></td>
            <td>
                <a href="/messages/edit/<?= $msg['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/messages/delete/<?= $msg['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this message?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
