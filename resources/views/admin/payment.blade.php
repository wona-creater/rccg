<x-app-layout>




    <div class="content-container">
        <div class="header-section">
            <p>Payment Options</p>
             <a href="{{route('add')}}"class="add-button">Add Payment Method</a>
        </div>
        <h2 class="section-title">Bank Transfers</h2>
        <div class="table-container">
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th class="bank-table-column-120">Bank Name</th>
                            <th class="bank-table-column-240">Account Number</th>
                            <th class="bank-table-column-360">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bank-table-column-120">First National Bank</td>
                            <td class="bank-table-column-240">1234567890</td>
                            <td class="bank-table-column-360 action-column">Delete</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <h2 class="section-title">Cryptocurrency Wallets</h2>
        <div class="table-container">
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th class="crypto-table-column-120">Cryptocurrency</th>
                            <th class="crypto-table-column-240">Wallet Address</th>
                            <th class="crypto-table-column-360">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="crypto-table-column-120">BTC</td>
                            <td class="crypto-table-column-240">bc1qar0srrr7xfkvy5l643lydnw9s0ssj09eq</td>
                            <td class="crypto-table-column-360 action-column">Edit</td>
                        </tr>
                        <tr>
                            <td class="crypto-table-column-120">ETH</td>
                            <td class="crypto-table-column-240">0xAb5801a7D398053032f21E491B2e11636</td>
                            <td class="crypto-table-column-360 action-column">Edit</td>
                        </tr>
                        <tr>
                            <td class="crypto-table-column-120">USDTM (BNB Chain)</td>
                            <td class="crypto-table-column-240">0x55d398326f99059ff775485246999027b3197955</td>
                            <td class="crypto-table-column-360 action-column">Edit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</x-app-layout>
