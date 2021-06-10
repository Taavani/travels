@component('mail::message')
# Hello {{ $name }}

Thank you for your inquiry.

Your reference number is <span style="font-style: italic">{{ $ref }}</span>.

We will contact you as soon as possible and help you find your perfect
Greenlandic adventure.

If you have any follow-up questions just email us by replying to this
email.

Thanks,<br>
<div class="brand">#TravelsToGreenland</div>
@endcomponent
