@if(Auth::check())
<div class="col-lg-3">
	<ul class="list-group">
		<a href="/home"
		   class="list-group-item list-group-item-action">
			Назад
		</a>
		<a href="{{route ('admin.category.index')}}"
		   class="list-group-item list-group-item-action">
			Перелік категорій
		</a>
		<a href="{{route ('admin.category.create')}}"
		   class="list-group-item list-group-item-action">
			Створити нову категорію
		</a>
		<a href="{{route ('admin.product.index')}}"
		   class="list-group-item list-group-item-action">
			Перелік Товарів</a>
		<a href="{{route ('admin.product.create')}}"
		   class="list-group-item list-group-item-action">
			Створити новий товар
		</a>
		<a href="{{route ('admin.news.index')}}"
		   class="list-group-item list-group-item-action">
			Перелік Новин</a>
		<a href="{{route ('admin.news.create')}}"
		   class="list-group-item list-group-item-action">
			Створити свіжу новину
		</a>
		<a href="{{route ('admin.media.index')}}"
		   class="list-group-item list-group-item-action">
			Перелік медіа</a>
		<a href="{{route ('admin.media.create')}}"
		   class="list-group-item list-group-item-action">
			Створити нове медіа
		</a>
	</ul>
</div>
@endif