<form action="/payment/create-invoice" method="post">
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="amount">Amount</label>
    <input type="number" name="amount" min="10000" required>
    <label for="description">Description</label>
    <input type="text" name="description" required>

    <button type="submit">Create Invoice</button>
</form>