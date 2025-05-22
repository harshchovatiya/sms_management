<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<style>
.dashboard-container {
    max-width: 600px;
    margin: 60px auto;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 6px 24px rgba(0,0,0,0.08);
    padding: 40px 32px;
    text-align: center;
}
.dashboard-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 18px;
    letter-spacing: 1px;
}
.dashboard-desc {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 32px;
}
.dashboard-btn {
    background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
    color: #fff;
    border: none;
    padding: 14px 36px;
    font-size: 1.1rem;
    border-radius: 8px;
    transition: background 0.2s, transform 0.2s;
    box-shadow: 0 2px 8px rgba(0,123,255,0.12);
    text-decoration: none;
    display: inline-block;
}
.dashboard-btn:hover {
    background: linear-gradient(90deg, #0056b3 0%, #007bff 100%);
    transform: translateY(-2px) scale(1.03);
}
@media (max-width: 600px) {
    .dashboard-container {
        padding: 24px 8px;
    }
    .dashboard-title {
        font-size: 2rem;
    }
}
</style>

<div class="dashboard-container">
    <h1 class="dashboard-title">Welcome to the SMS Management System</h1>
    <p class="dashboard-desc">
        Easily manage, send, and view your SMS messages from a single dashboard.<br>
        Get started by viewing your messages.
    </p>
    <a href="/messages" class="dashboard-btn">View Messages</a>
</div>

<?= $this->endSection() ?>
