<x-app-layout>


  
    <div class="content-container">
        <div class="layout-content-container">
            <div class="header-section">
                <p>Codes</p>
            </div>
            <div class="form-group">
                <label class="form-label">
                    <p>Number of Codes to Generate</p>
                    <div class="input-with-copy">
                        <input id="code-count-input" class="form-input" placeholder="Enter number of codes"
                            value="" />
                        <button class="copy-button" onclick="copyCodeCount()">📋</button>
                    </div>
                </label>
            </div>
            <div class="form-group justify-start">
                <button class="generate-button">Generate Codes</button>
            </div>
            <div class="table-container">
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-120">Code</th>
                                <th class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-240">User</th>
                                <th class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-360">Subscription</th>
                                <th class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-480">Status</th>
                                <th class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-600">Start date</th>
                                <th class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-720">End date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-120">SUMMER2024</td>
                                <td class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-240">Alex Bennett</td>
                                <td class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-360">Premium</td>
                                <td class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-480">
                                    <button class="status-button">Active</button>
                                </td>
                                <td class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-600">06/01/2024</td>
                                <td class="table-fb017011-6a5e-4765-93b9-003352f27a83-column-720">08/31/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyCodeCount() {
            const input = document.getElementById('code-count-input');
            navigator.clipboard.writeText(input.value)
                .then(() => {
                    alert('Number of codes copied to clipboard!');
                })
                .catch(err => {
                    console.error('Failed to copy: ', err);
                    alert('Failed to copy number of codes.');
                });
        }
    </script>
</x-app-layout>

{{--  --}}
