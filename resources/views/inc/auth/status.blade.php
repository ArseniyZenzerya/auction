<div class="status-create-block container">
    <a href="{{route('index')}}">
        <div class="status-create-button">
            Back home
        </div>
    </a>
    <div class="status-create">
        <div class="@if($step == 1)active-border @endif">
            <div>
                <div class="number @if($step == 1)active-number @endif">1</div>
            </div>
            <div>
                <p class="@if($step == 1) black @endif">@if($step != 1) Finished @else In Progress @endif</p>
                <p class="@if($step == 1) black @endif">Basic Info</p>
            </div>
        </div>
        <div class="@if($step == 2)active-border @endif">
            <div>
                <div class="number @if($step == 2)active-number @endif">2</div>
            </div>
            <div>
                <p class="@if($step == 2) black @endif">@if($step == 2 && $step != 3) In Progress @else Finished @endif</p>
                <p class="@if($step == 2) black @endif">Photos</p>
            </div>
        </div>
        <div class="@if($step == 3) active-border @endif">
            <div>
                <div class="number @if($step == 3)active-number @endif">3</div>
            </div>
            <div>
                <p class="@if($step == 3) black @endif">@if($step == 3) In Progress @else Waiting @endif</p>
                <p class="@if($step == 3) black @endif">Auction Setup</p>
            </div>
        </div>
    </div>
    <input type="submit" form="create-auction" class="status-create-button" value="Next">
</div>


<style>
    .status-create-block {
        margin-top: 50px;
        display: flex;
        margin-bottom: 60px;
        justify-content: space-between;
        align-items: center;
    }

    .status-create-button {
        padding: 6.5px 15px;
        background: #1890FF;
        color: #fff;
        width: 150px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
    }

    .status-create {
        display: flex;
    }

    .number {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid rgba(0, 0, 0, 0.25);
        color: rgba(0, 0, 0, 0.25);
        width: 32px;
        height: 32px;
        border-radius: 100%;
        margin-right: 8px;

    }

    .active-number {
        color: #fff;
        background: #1890FF;
        border: none;
    }

    .status-create > div {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 265px;
        color: rgba(0, 0, 0, 0.45);
        padding: 12px;
    }

    .black {
        color: #000;
    }

    .active-border {
        border-bottom: 1px solid #1890FF;
    }


</style>
