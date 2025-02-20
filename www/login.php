<?php

$title = '登入系統';
$layout = './layout/layout.php';

require './arranger.php';

if (isset($_SESSION['sn'])) {
	header('Location: /index.php');

	exit;
}

?>

<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
	<div class="d-flex align-items-center justify-content-center w-100">
		<div class="row justify-content-center w-100">
			<div class="col-md-8 col-lg-6 col-xxl-3">
				<div class="card mb-0">
					<div class="card-body">
						<form>
							<div class="text-nowrap text-center mb-3">
								<svg
									width="16"
									height="16"
									viewBox="0 0 16 16"
									fill="#0f0f0f"
									xmlns="http://www.w3.org/2000/svg"
									class="logo mb-1"
								>
									<path
										d="M1.04534 9.8635C0.618564 9.97785 0.175656 9.72479 0.104477 9.28874C-0.134422 7.82519 0.0374689 6.31826 0.608966 4.93854C1.2829 3.31152 2.47487 1.95234 4 1.07181C5.52513 0.191271 7.2982 -0.161414 9.0442 0.0684522C10.7902 0.298318 12.4116 1.09789 13.6568 2.34315C14.9021 3.58842 15.7017 5.20979 15.9315 6.95579C16.1614 8.7018 15.8087 10.4749 14.9282 12C14.0477 13.5251 12.6885 14.7171 11.0615 15.391C9.68175 15.9625 8.17481 16.1344 6.71127 15.8955C6.27521 15.8243 6.02215 15.3814 6.1365 14.9547C6.25085 14.5279 6.68953 14.28 7.12723 14.3402C8.24811 14.4945 9.39505 14.3495 10.4492 13.9128C11.7508 13.3737 12.8381 12.4201 13.5426 11.2C14.247 9.97989 14.5291 8.56144 14.3452 7.16464C14.1613 5.76783 13.5217 4.47074 12.5255 3.47452C11.5293 2.47831 10.2322 1.83866 8.83536 1.65476C7.43856 1.47087 6.0201 1.75302 4.8 2.45745C3.57989 3.16188 2.62632 4.24922 2.08717 5.55083C1.65054 6.60495 1.50548 7.75189 1.65978 8.87277C1.72004 9.31047 1.47211 9.74915 1.04534 9.8635Z"
									/>
									<path
										d="M4.4 14.2354C4.17908 14.618 3.68697 14.7523 3.3283 14.4943C2.62629 13.9893 2.01075 13.3737 1.50575 12.6717C1.24774 12.313 1.38198 11.8209 1.76462 11.6C2.14725 11.3791 2.63275 11.514 2.89965 11.8661C3.25277 12.3319 3.66808 12.7472 4.13393 13.1004C4.48604 13.3672 4.62091 13.8527 4.4 14.2354Z"
									/>
									<path
										d="M5.66443 3.81251C5.48792 4.00097 5.33555 4.20937 5.21003 4.43281C4.99365 4.81802 5.26212 5.2664 5.6889 5.38075C6.10788 5.49301 6.5357 5.22284 6.83221 4.90626C7.01208 4.71422 7.23654 4.5695 7.48569 4.48492C7.73485 4.40034 8.00102 4.37852 8.26063 4.42138C8.52024 4.46424 8.76526 4.57046 8.97401 4.73064C9.18276 4.89082 9.34878 5.10001 9.45738 5.33968C9.56597 5.57934 9.61378 5.84209 9.59657 6.10465C9.57936 6.36721 9.49766 6.62147 9.35872 6.84491C8.79917 7.74473 8.5702 7.92806 7.86127 8.85197C7.59603 9.19763 7.40592 9.59145 7.29948 10.0083C7.19016 10.4364 7.55817 10.8 8 10.8C8.44182 10.8 8.78404 10.4207 8.99586 10.0329C9.0352 9.96091 9.0802 9.89171 9.13063 9.82598C9.73515 9.03816 10.1711 8.56833 10.7174 7.68982C10.9953 7.24294 11.1587 6.73441 11.1931 6.2093C11.2276 5.68418 11.1319 5.15868 10.9148 4.67934C10.6976 4.20001 10.3655 3.78163 9.94803 3.46128C9.53053 3.14092 9.04047 2.92847 8.52126 2.84275C8.00205 2.75703 7.46971 2.80068 6.97139 2.96983C6.47308 3.13899 6.02417 3.42843 5.66443 3.81251Z"
									/>
									<path
										d="M8.79999 12.4C8.79999 12.8418 8.44182 13.2 8 13.2C7.55817 13.2 7.2 12.8418 7.2 12.4C7.2 11.9582 7.55817 11.6 8 11.6C8.44182 11.6 8.79999 11.9582 8.79999 12.4Z"
									/>
								</svg>
								<div>Leran What You Want</div>
							</div>
							<div class="mb-3">
								<label
									for="username"
									class="form-label"
								>使用者名稱或電子信箱地址</label>
								<input
									type="text"
									class="form-control"
									name="username"
									required
									autofocus
								/>
								<div class="invalid-feedback">帳戶不存在</div>
							</div>
							<div class="collapse">
								<label
									for="password"
									class="form-label"
								>密碼</label>
								<input
									type="password"
									class="form-control"
									name="password"
									disabled
									required
								/>
								<div class="invalid-feedback">密碼不正確</div>
							</div>
							<div>
								<button
									type="button"
									class="btn btn-primary w-100 py-8 fs-4 rounded-2"
									disabled
								>登入</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div
	class="modal fade"
	id="dialog"
	tabindex="-1"
>
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5"></h1>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
				></button>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button
					type="button"
					class="btn btn-primary"
					data-bs-dismiss="modal"
				>確定</button>
			</div>
		</div>
	</div>
</div>

<script>
	(function () {
		const form = document.forms[0];
		const button = form.elements[2];
		const dialog = document.getElementById('dialog');

		form.addEventListener(
			'keyup',
			e => e.key === 'Enter' && button.click()
		);
		form.addEventListener('input', recover);
		button.addEventListener('click', validate);

		function recover(e) {
			e.target.removeAttribute('pattern');
			this.classList.remove('was-validated');

			return button.disabled = !this.checkValidity();
		}

		async function validate() {
			if (!form.reportValidity()) {
				return;
			}

			const init = {
				method: 'POST',
				body: new URLSearchParams(new FormData(form))
			};
			const data = await fetch('login-api.php', init).then(
				r => r.json(),
				message => ({ summary: '', message })
			);

			if (data.code === '0000') {
				return location.replace('/');
			}

			button.disabled = true;

			if (data.code === '0001') {
				form.elements[0].pattern = '';

				return form.classList.add('was-validated');
			}

			if (data.code === '0002') {
				form.elements[0].readOnly = true;
				form.elements[1].disabled = false;

				new bootstrap.Collapse(form.children[2]).show();

				form.elements[1].focus();
				form.children[2].classList.add('mb-4');

				return form.classList.remove('was-validated');
			}

			if (data.code === '0004') {
				form.elements[1].pattern = '';

				return form.classList.add('was-validated');
			}

			dialog.getElementsByTagName('h1')[0].textContent = data.summary;
			dialog.getElementsByClassName('modal-body')[0].textContent = data.message;

			new bootstrap.Modal(dialog).show();
		}
	})();
</script>
