<div class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="latter hidden-xs">
				<a href="{{ route('frontend.term-condition') }}">Terms & Condition</a>
				<a href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a>
				<a href="{{ route('frontend.rule-tip') }}">Rules & Tips</a>
			</div>
			<div class="latter-mobile hidden-sm visible-xs">
				<div class="pull-left">
					<a href="{{ route('frontend.term-condition') }}">Terms & Condition</a>
				</div>
				<div class="pull-right">
					<a href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a>
				</div>
				<div class="rule-tip">
					<a href="{{ route('frontend.rule-tip') }}">Rules & Tips</a>
				</div>
			</div>
			<div class="latter-right">
				<p>FOLLOW US</p>
				<ul class="face-in-to">
                    @isset($contact_us->twitter)
						<li>
							<a href="{{ $contact_us->twitter}}" target="__blank">
								<span></span>
							</a>
						</li>
					@endisset
					@isset($contact_us->facebook)
						<li>
							<a href="{{ $contact_us->facebook}}" target="__blank">
								<span class="facebook-in"></span>
							</a>
						</li>
					@endisset
					<div class="clearfix"> </div>
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom text-center">
		<span>Copyright © 2019 All Right Reserved</span>
	</div>
</div>