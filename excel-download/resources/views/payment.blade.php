<table>
    <thead>
    <tr>
         <th style="font-weight: bold">Serial No</th>
         <th style="font-weight: bold">company_name</th>
         <th style="font-weight: bold">pos_info</th>
         <th style="font-weight: bold">payment_method</th>
         <th style="font-weight: bold">payment_status</th>
         <th style="font-weight: bold">payment_history</th>
         <th style="font-weight: bold">payment_amount</th>
         <th style="font-weight: bold">due_amount</th>
         <th style="font-weight: bold">payment_approval</th>
    </tr>
    </thead>
    <tbody>
    @foreach($payments as $payment)
        <tr>
            <td>{{ $loop->index + 1}}</td>
            <td>{{ $payment->company_name}}</td>
            <td>{{ $payment->pos_info}}</td>
            <td>{{ $payment->payment_method}}</td>
            <td>{{ $payment->payment_status}}</td>
            <td>{{ $payment->payment_history}}</td>
            <td>{{ $payment->payment_amount}}</td>
            <td>{{ $payment->due_amount}}</td>
            <td>{{ $payment->payment_approval}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>