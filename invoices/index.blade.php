@foreach ($invoices as $invoice)
    <div>{{ $invoice->customer_name }}</div>
    <!-- Display other invoice details -->
    <a href="{{ route('invoices.show', $invoice->id) }}">View</a>
    <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
{{ $invoices->links() }} <!-- Pagination -->
