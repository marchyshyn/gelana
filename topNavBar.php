<nav class="topNavBar">
			<ul>
				<li>
					<?php
					    // Получим ID категории
					    $category_id = get_cat_ID( 'офисы и банки' );
					    // Теперь, получим УРЛ категории
					    $category_link = get_category_link( $category_id );
					?>
					<!-- выведем ссылку на категорию -->
					<a href="<?php echo $category_link; ?>" id="bt1"></a>
				</li>
				<li>
					<?php
					    $category_id = get_cat_ID( 'торговые и общественные зоны' );
					    $category_link = get_category_link( $category_id );
					?>
					<a href="<?php echo $category_link; ?>" id="bt2"></a>
				</li>
				<li>
					<?php
					    $category_id = get_cat_ID( 'дома и квартиры' );
					    $category_link = get_category_link( $category_id );
					?>
					<a href="<?php echo $category_link; ?>" id="bt3"></a>
				</li>
				<li>
					<?php
					    $category_id = get_cat_ID( 'кафе и рестораны' );
					    $category_link = get_category_link( $category_id );
					?>
					<a href="<?php echo $category_link; ?>" id="bt4"></a>
				</li>
				<li>
					<?php
					    $category_id = get_cat_ID( 'гостиницы' );
					    $category_link = get_category_link( $category_id );
					?>
					<a href="<?php echo $category_link; ?>" id="bt5"></a>
				</li>
				<li>
					<?php
					    $category_id = get_cat_ID( 'государственные учреждения' );
					    $category_link = get_category_link( $category_id );
					?>
					<a href="<?php echo $category_link; ?>" id="bt6"></a>
				</li>
			</ul>
		</nav>