<div>
    <form wire:submit.prevent="login">
        <div>
            <label>Email</label>
            <input type="email" wire:model="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" wire:model="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>