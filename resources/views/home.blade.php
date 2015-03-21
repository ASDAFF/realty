@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
                    <div id="sqlqueryresults" class="ajax"><table id="table_results" class="data ajax table table-hover" align="center" style="cursor: default;">
                            <thead><tr>
                                <th>Компания</th>
                                <th>Контактное лицо</th>
                                <th>Дата заселения</th>
                                <th>Количество дней</th>
                                <th>Комментарии</th>
                            </tr>

                            </thead>

                            <tbody>

                            @if(isset($bargains))

                                @foreach($bargains as $bargain)


                                    <tr class="odd"><td  class="data inline_edit not_null odd  nowrap " style="display: block;">
                                            Название компании</td>
                                    <td  class="data inline_edit  odd  "><a title="редактировать запись" href="'.$bargain[$i]['link'].'">
                                            ФИО клиента</td>
                                    <td  class="data inline_edit  odd  ">{{ $bargain->coming_date }}</td>
                                    <td  class="data inline_edit  odd  ">{{ $bargain->day_count }}</td>
                                    <td  class="data inline_edit  odd  ">{{ $bargain->note }}</td>
                                    </tr>

                                @endforeach

                            @else
                                <p>Нет сделок</p>
                            @endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
