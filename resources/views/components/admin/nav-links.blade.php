<flux:navlist.item icon="home" :href="route('admin.dashboard')" :current="request()->routeIs('admin.dashboard')"
    wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>

<flux:navlist.group expandable heading="Banks" class="hidden lg:grid">
    <flux:navlist.item :href="route('admin.banks.index')"  :current="request()->routeIs('admin.banks.index')" href="#">Bank's List</flux:navlist.item>
    <flux:navlist.item :href="route('admin.banks.create')" :current="request()->routeIs('admin.banks.create')" href="#">Create Bank</flux:navlist.item>
</flux:navlist.group> 