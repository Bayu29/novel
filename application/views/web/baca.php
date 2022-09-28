<!-- ===============  breadcrumb style start =============== -->
<div class="breadcrumb_style__two bg-body-2">
	<div class="container">
		<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
			<a href="<?= site_url() ?>" class="back__btn">
				<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11 6.5H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					<path d="M6 11.5L1 6.5L6 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg>
				<span>Back to home</span>
			</a>

			<ul class="d-flex page__list">
				<li><a href="<?= site_url() ?>">Home</a></li>
				<li><a href="<?= base_url() ?>web/detail/<?= encrypt_url($novel_chapter->novel_id) ?>"><?= $novel_chapter->title ?></a></li>
				<li><a href="<?= base_url() ?>web/read/<?= encrypt_url($novel_chapter->novel_chapter_id) ?>"><?= $novel_chapter->nama_chapter ?></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- ===============  breadcrumb style end =============== -->

<div class="nft_details__style pt-60 bg-body-2 section_gap_y_bottom__1">
	<div class="container">
		<div class="row gx-7 gy-4 position-relative justify-content-between">
			<div class="chapter-novel-content" style="text-align: justify;" onmousedown="return false" onselectstart="return false">
				<?= $novel_chapter->isi_chapter ?>
			</div>
		</div>
	</div>
</div>

<div class="bg-body-2">
	<div class="container">
		<?php
		$jumlah_comment = $this->db->where('novel_chapter_id', $novel_chapter->novel_chapter_id)->get('comments')->num_rows();
		?>
		<h6 class="comment-page-title"><?= $jumlah_comment ?> Komentar</h6>
		<div class="novel-comment">
			<div class="row">
				<div class="col-12">
					<form action="<?= base_url() ?>web/comment" method="post">
						<div class="form-group mt-2 ml-2">
							<input type="hidden" name="novel_chapter_id" value="<?= $novel_chapter->novel_chapter_id ?>">
							<input type="hidden" name="novel_id" value="<?= $novel_chapter->novel_id ?>">
							<textarea class="form-control form-comment" name="message" placeholder="Tinggalkan komentar" id="form-comment"></textarea>
							<button type="submit" class="btn btn-primary ml-auto float-end">Submit</button>
						</div>
					</form>
				</div>
			</div>
			<ul class="novel-comment-list mt-3 mr-2">
				<?php if (count($parent_comments) > 0) {?>
					<?php foreach ($parent_comments as $i => $parent_comment) :  ?>
					<li class="novel-comment-item">
						<div class="row novel-comment-content">
							<div class="col-1 profile-comment-chapter">
								<div class="profile-comment"></div>
							</div>
							<div class="col-11 mt-2">
								<div class="parent-comment">
									<h6 class="comment-title"><?= $parent_comment->nama ?></h6>
									<p class="comment-text"><?= $parent_comment->message ?></p>
									<a class="btn btn-reply" href="#" onclick="event.preventDefault();reply('parent-comment-reply<?= $parent_comment->comment_id ?>', '<?= $parent_comment->comment_id ?>', '<?= $parent_comment->user_id_sender ?>', '<?= $novel_chapter->novel_id ?>', '<?= $novel_chapter->novel_chapter_id ?>')"><i class="fa-solid fa-reply mr-1"></i>Reply</a>

									<div class="parent-comment-reply" id="parent-comment-reply<?= $parent_comment->comment_id ?>">
									</div>

									<div class="reply-comment ml-1 mt-2">
										<ul class="reply-comment-list">
											<?php 
												$this->load->model('Comment_model'); 
												$child_comments = $this->Comment_model->child_comment($parent_comment->comment_id);
											?>
											<?php foreach($child_comments as $a => $child_comment):?>
											<?php 
												$user_reply = $this->db->where('member_id', $child_comment->reply_to)->get('member')->row();
											?>
											<li class="reply-comment-item">
												<div class="row">
													<div class="col-1 profile-comment-chapter">
														<div class="profile-comment"></div>
													</div>
													<div class="col-11 mt-2">
														<div class="d-flex">
															<h6 class="comment-title"><?= $child_comment->nama ?>  </h6><span class="user-reply-to ml-1"><i class="fa-solid fa-share"></i> <?= $user_reply->nama ?></span>
														</div>
														<p class="comment-text"><?= $child_comment->message ?></p>
														<a class="btn btn-reply" href="#" onclick="event.preventDefault();reply('child-comment-reply<?= $child_comment->comment_id ?>', '<?= $parent_comment->comment_id ?>', '<?= $child_comment->user_id_sender ?>', '<?= $novel_chapter->novel_id ?>', '<?= $novel_chapter->novel_chapter_id ?>')"><i class="fa-solid fa-reply mr-1"></i>Reply</a>

														<div class="parent-comment-reply" id="child-comment-reply<?= $child_comment->comment_id ?>">
														</div>
													</div>
												</div>
											</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>	
					<?php endforeach; ?>
					<!-- <li class="load-more-list">
						<div class="nocomment-text text-center"><button class="btn btn-secondary" onclick="load_more('<?= $novel_chapter->novel_chapter_id ?>')">Load More <i class="fa-solid fa-caret-down"></i></button></div>
					</li> -->
				<?php } else { ?>
					<li>
						<div class="nocomment-text">Belum Ada Komentar</div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<script>
	let base_url = <?php echo "'" . site_url('/') . "'" ?>;
	let offset_comment = "<?= count($parent_comments) ?>";
	function load_more(novel_chapter_id)
	{
		let url = base_url + 'web/load_more_comment';
		$.ajax({
			url : url,
			type: 'POST',
			data: {
				offset_comment: offset_comment,
				novel_chapter_id: novel_chapter_id,
			}, success: function(result) {
				let res = JSON.parse(result);
				
				let html = ``;

				res.parent_comments.forEach(element => {
					console.log(element); 	
					html += `<li class="novel-comment-item">`;
						html += `<div class="row novel-comment-chapter">`;
							html += `<div class="col-1 profile-comment-chapter">`;
								html += `<div class="profile-comment">`;
								html += `</div>`;
							html += `</div>`;
							html += `<div class="col-11 mt-2">`;
								html += `<div class="parent-comment">`;
									html += `<h6>${element.user_sender}</h6>`;
									html += `<p>${element.message}</p>`;
									html += `<a class="btn btn-reply" href="#" onclick="event.preventDefault();reply('parent-comment-reply${element.comment_id}', '${element.comment_id}', '${element.user_id_sender}', '${element.novel_id}', '${element.novel_chapter_id}')"><i class="fa-solid fa-reply mr-1"></i>Reply</a>`;
									html += `<div class="parent-comment-reply" id="parent-comment-reply${element.comment_id}">`;
									html += `</div>`;
									//reply
									if (res.child_comment.length > 0) {
										html += `<div class="reply-comment ml-1 mt-2">`;
										html += `<ul class="reply-comment-list">`;
											res.child_comment.forEach(child => {
												if (child.length > 0) {
													html += `<li class="reply-comment-item">`;
														html += `<div class="row">`;
															html += `<div class="col-1 profile-comment-chapter">`;
																html += `<div class="profile-comment"></div>`;
															html += `</div>`;
															html += `<div class="col-11 mt-2">`;
																html += `<div> class="d-flex>"`;
																html += `<h6 class="comment-title">${child.user_sender}</h6> <span class="user-reply-to ml-1"><i class="fa-solid fa-share"></i>${child.user_reply}</span>`;
																html += `</div>`;
																html += `<p class="comment-text">${child.message}</p>`;
																html += `<a class="btn btn-reply" href="#" onclick="event.preventDefault();reply('child-comment-reply${child.comment_id}', '${child.comment_id}', '${child.user_id_sender}', '${child.novel_id}', '${child.novel_chapter_id}')"><i class="fa-solid fa-reply mr-1"></i>Reply</a>`;

																html += `<div class="parent-comment-reply" id="child-comment-reply${child.comment_id}">`
															html += `</div>`;
														html += `</div>`;
													html += `</li>`;
												}
											})
										html += `</ul>`;
										html += `</div>`;
									} 
									//end reply
								html += `</div>`;
							html += `</div>`;
						html += `</div>`
					html += `</li>`;
				})	

				$(html).insertBefore($('.load-more-list'))
			}
		})
	}

	function reply(target, parent_id, reply_to, novel_id, novel_chapter_id)
	{
		let url = base_url + 'web/comment';
		
		let target_element = document.getElementById(target);
		let countChild = getCount(target_element, false);

		if (countChild <= 0) {
			let element = `<div class="row">
						<div class="col-1 profile-comment-chapter">
							<div class="profile-comment"></div>
						</div>
						<div class="col-11 mt-2">
							<form action="${url}" method="post">
								<input type="hidden" name="novel_id" value="${novel_id}">
								<input type="hidden" name="novel_chapter_id" value="${novel_chapter_id}">
								<input type="hidden" name="parent_id" value="${parent_id}">
								<input type="hidden" name="reply_to" value="${reply_to}">
								<div class="form-group">
									<textarea class="form-control" placeholder="Masukkan Komentar" name="message" id="reply_comment"></textarea>
								</div>
								<button type="button" class="btn btn-danger ml-auto float-end" onclick="deleteElement('${target}')">Batal</button>
								<button class="btn btn-primary ml-auto float-end">Submit</button>
							</form>
						</div>
					</div>`;
			$(`#${target}`).append(element);
		}
	}

	function getCount(parent, getChildrensChildren){
		var relevantChildren = 0;
		var children = parent.childNodes.length;
		for(var i=0; i < children; i++){
			if(parent.childNodes[i].nodeType != 3){
				if(getChildrensChildren)
					relevantChildren += getCount(parent.childNodes[i],true);
				relevantChildren++;
			}
		}
		return relevantChildren;
	}

	function deleteElement(target)
	{
		let element = document.getElementById(target);
		element.innerHTML = "";
	}
</script>


