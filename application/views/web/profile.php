<div class="author_profiler__wrapper bg-body-2 section_gap_y_bottom__1">
        <div class="author_profile__cover"></div>
        <div class="container">

            <div class="author_profiler__details">
                <div class="ap__header d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="author_image">
                        <img src="<?= base_url() ?>template/web/assets/images/nft/author__xxl.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row pt-40 gy-4">
                <div class="col-lg-3">
                    <div class="author_detail__info">
                    
                        <h3 class="author__name"><?= $user->nama_lengkap ?></h3>
                        <h6 class="author__username"><?= $user->email ?></h6>

                        <div class="followers__wrap">
                            <div class="single__flw">
                                <h5>Saldo User</h5>
                                <span>Rp. <?= number_format($user->saldo,0, '.', '.') ?></span> <br>

								 <a type="button" class="submit-v2 mt-20">
									Deposit
								</a>
                            </div>
                        </div>

                        <div class="join__date">
                            <strong>Bergabung</strong>
                            <span><?= date('d M Y', strtotime($user->created_at)) ?></span>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="nft_grid__header row mb-40">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills pills-default" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-tab-one" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Creations 48</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-tab-two" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Collections 24</button>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-tab-one">
                            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
                                <div class="col pt-lg-0 pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-five.png" alt="">
                                            </a>

                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Desmond Eagle <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Abstract Painting</a></h5>
                                                <ins class="current-price"><img src="assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.01
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>

                                                <div class="nft__countdown"><div class="count__down countdown" data-date="2022-08-13" style="display: none;">
                                                </div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pt-lg-0 pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-six.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Eric Widget <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Sound of Silence</a></h5>
                                                <ins class="current-price"><img src="assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.76
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>

                                                <div class="nft__countdown"><div class="count__down countdown" data-date="2022-11-09"><div class="countdown-container days"><span class="countdown-value days-bottom">59</span><span class="countdown-heading days-top">d</span></div><div class="countdown-container hours"><span class="countdown-value hours-bottom">12</span><span class="countdown-heading hours-top">h</span></div><div class="countdown-container minutes"><span class="countdown-value minutes-bottom">58</span><span class="countdown-heading minutes-top">m</span></div><div class="countdown-container seconds"><span class="countdown-value seconds-bottom">44</span><span class="countdown-heading seconds-top">s</span></div></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pt-lg-0 pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-seven.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Tsuki Genesis <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Geometrical Figure</a></h5>
                                                <ins class="current-price"><img src="assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.46
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-eight.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Norman Gordon <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Running Puppets</a></h5>
                                                <ins class="current-price"><img src="assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.01
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-one.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Beeing Hope <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Geometrical Figure</a></h5>
                                                <ins class="current-price"><img src="<?= base_url() ?>template/web/assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.01
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-two.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Weir Doe <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Running Puppets</a></h5>
                                                <ins class="current-price"><img src="<?= base_url() ?>template/web/assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.76
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-tab-two">
                            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
                                <div class="col pt-lg-0 pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-eight.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Norman Gordon <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Running Puppets</a></h5>
                                                <ins class="current-price"><img src="assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.01
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pt-lg-0 pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-one.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Beeing Hope <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Geometrical Figure</a></h5>
                                                <ins class="current-price"><img src="assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.01
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pt-lg-0 pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-two.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Weir Doe <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Running Puppets</a></h5>
                                                <ins class="current-price"><img src="assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.76
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pt-lg-0 pt-3">
                                    <div class="auction_card_style__two">
                                        <div class="auction_card__thumb">
                                            <a href="nft-details.html">
                                                <img src="<?= base_url() ?>template/web/assets/images/nft/auction-three.png" alt="">
                                            </a>
                                            <a href="nft-details.html" class="bid__btn">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34865 0.671187C6.24866 -0.251818 4.60869 -0.10834 3.68569 0.991654L1.72805 3.32468C0.805041 4.42467 0.94852 6.06464 2.04851 6.98764L3.02566 7.80757L0.920733 10.3161C0.395084 10.9426 0.476795 11.8765 1.10324 12.4022C1.72968 12.9278 2.66364 12.8461 3.18929 12.2197L5.29422 9.71111L6.36918 10.6131C7.46917 11.5361 9.10914 11.3926 10.0321 10.2926L11.9898 7.95962C12.9128 6.85962 12.7693 5.21966 11.6693 4.29665L7.34865 0.671187ZM4.60494 1.763C5.10194 1.1707 5.985 1.09344 6.5773 1.59044L6.6648 1.66385L2.96539 6.07264C2.9456 6.09622 2.92823 6.12102 2.91324 6.14674L2.81986 6.06839C2.22755 5.57139 2.1503 4.68833 2.6473 4.09602L4.60494 1.763ZM3.71104 6.81618L6.28054 8.97225L10.038 4.4943L7.47438 2.34317L3.77497 6.75195C3.75518 6.77554 3.73377 6.79695 3.71104 6.81618ZM7.14052 9.69386L7.09012 9.65156L10.8476 5.17362L10.898 5.21591C11.4903 5.71291 11.5675 6.59597 11.0705 7.18827L9.11289 9.5213C8.61589 10.1136 7.73283 10.1909 7.14052 9.69386ZM1.83999 11.0875L3.71871 8.8485L4.14876 9.20935L2.27003 11.4483C2.17039 11.5671 1.99334 11.5826 1.87458 11.4829C1.75583 11.3833 1.74034 11.2062 1.83999 11.0875Z" fill="currentColor"></path>
                                                </svg>

                                                Bid
                                            </a>
                                        </div>
                                        <div class="nft__disc">
                                            <a href="author-profile.html" class="nft__creator">Tsuki Genesis <img src="<?= base_url() ?>template/web/assets/images/icons/tick-blue.svg" alt=""></a>

                                            <div class="nft__title">
                                                <h5><a href="nft-details.html">Abstract Painting</a></h5>
                                                <ins class="current-price"><img src="<?= base_url() ?>template/web/assets/images/icons/tri-flash-blue.svg" alt=""> <span>0.46
                                                        ETH</span></ins>
                                            </div>

                                            <div class="nft__bottom">
                                                <ul class="nft__actions d-flex">
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
                                                            <path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
                                                        </svg></li>
                                                    <li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
                                                        </svg> <span>3</span>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="more-load-wrap text-center mt-50">
                        <a href="#" class="load-more-btn varient-2">
                            <svg width="18" height="19" fill="none" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.775 3.61794C11.0224 3.39694 10.192 3.25244 9.27502 3.25244C5.13143 3.25244 1.77502 6.55046 1.77502 10.622C1.77502 14.702 5.13143 18 9.27502 18C13.4186 18 16.775 14.702 16.775 10.6305C16.775 9.11747 16.3079 7.70646 15.512 6.53346" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12.848 3.82201L10.348 1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12.8478 3.82202L9.93256 5.91303" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            View all items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-iN0YJC2kMSOPSgYB"></script>
