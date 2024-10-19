<div class="pos-payment-method">
    <h3>{{ __('POS Payment') }}</h3>

    <p>{{ __('You have selected to pay using the POS Payment method.') }}</p>

    <p>{{ __('Your payment will be processed through a selected Turkish bank.') }}</p>

    <div class="payment-details">
        <p>{{ __('Please confirm to proceed with your payment.') }}</p>
        
        <!-- Optional: Add dropdown for bank selection if needed -->
        <label for="bank">{{ __('Select Bank') }}</label>
        <select id="bank" name="bank">
            <option value="akbank">{{ __('Akbank') }}</option>
            <option value="garanti">{{ __('Garanti BBVA') }}</option>
            <option value="isbank">{{ __('Türkiye İş Bankası') }}</option>
            <option value="ziraat">{{ __('Ziraat Bankası') }}</option>
            <option value="vakifbank">{{ __('VakıfBank') }}</option>
            <option value="yapikredi">{{ __('Yapı Kredi') }}</option>
            <option value="finansbank">{{ __('QNB Finansbank') }}</option>
            <option value="halkbank">{{ __('Halkbank') }}</option>
        </select>

        <!-- You can add any extra input fields as necessary -->
        <p>{{ __('Additional Payment Information (Optional)') }}</p>
        <textarea name="additional_info" placeholder="{{ __('Enter any additional info here...') }}"></textarea>
    </div>

    <button type="submit">{{ __('Proceed with Payment') }}</button>
</div>
