<table>
    <thead>
    <tr>
        <th>Serial No</th>
        <th>Company Name</th>
        <th>pos_id</th>
        <th>pos_name </th>
        <th>email</th>
        <th>phone_number</th>
        <th>total_sales</th>
        <th>total_due</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->serial_no }}</td>
            <td>{{ $customer->company_name }}</td>
            <td>{{ $customer->pos_id }}</td>
            <td>{{ $customer->pos_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone_number }}</td>
            <td>{{ $customer->total_sales }}</td>
            <td>{{ $customer->total_due }}</td>
        </tr>
    @endforeach
    </tbody>
</table>