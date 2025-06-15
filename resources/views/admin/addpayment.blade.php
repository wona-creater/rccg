<x-app-layout>




    <div class="content-container">
        <div class="layout-content-container">
            <div class="header-section">
                <p>Add Payment Method</p>
            </div>
            <div class="radio-group">
                <label class="radio-label">
                    Bank Transfer
                    <input type="radio" name="payment-method" />
                </label>
                <label class="radio-label">
                    Cryptocurrency Wallet
                    <input type="radio" name="payment-method" />
                </label>
            </div>
            <h2 class="section-title">Bank Transfer</h2>
            <div class="form-group">
                <label class="form-label">
                    <p>Bank Name</p>
                    <input class="form-input" placeholder="Enter bank name" value="" />
                </label>
            </div>
            <div class="form-group">
                <label class="form-label">
                    <p>Account Number</p>
                    <input class="form-input" placeholder="Enter account number" value="" />
                </label>
            </div>
            <div class="form-group">
                <label class="form-label">
                    <p>Account Name</p>
                    <input class="form-input" placeholder="Enter account name" value="" />
                </label>
            </div>

            <div class="flex px-4 py-3 justify-start">
                <button class="submit-button">Add Payment Method</button>
            </div>
            <h2 class="section-title">Cryptocurrency Wallet</h2>
            <div class="form-group">
                <label class="form-label">
                    <p>Cryptocurrency</p>
                    <input class="form-input" placeholder="Select cryptocurrency" value="" />
                </label>
            </div>
            <div class="form-group">
                <label class="form-label">
                    <p>Wallet Address</p>
                    <input class="form-input" placeholder="Enter wallet address" value="" />
                </label>
            </div>
            <div class="form-group">
                <label class="form-label">
                    <p>Network</p>
                    <input class="form-input" placeholder="Select network" value="" />
                </label>
            </div>
            <div class="flex px-4 py-3 justify-start">
                <button class="submit-button">Add Payment Method</button>
            </div>
        </div>
    </div>




</x-app-layout>
