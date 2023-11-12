<table>
    <thead>
    <tr>
        <th style="font-weight: bold">Serial No</th>
        <th style="font-weight: bold">Company Name</th>
        <th style="font-weight: bold">pos_id</th>
        <th style="font-weight: bold">pos_name </th>
        <th style="font-weight: bold">email</th>
        <th style="font-weight: bold">phone_number</th>
        <th style="font-weight: bold">total_sales</th>
        <th style="font-weight: bold">total_due</th>
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