{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<x-backpack::menu-dropdown title="Models" icon="la la-database">
    <x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Teams" icon="la la-user-friends" :link="backpack_url('team')" />
    <x-backpack::menu-dropdown-item title="Team invitations" icon="la la-envelope" :link="backpack_url('team-invitation')" />
    <x-backpack::menu-dropdown-item title="Memberships" icon="la la-id-card" :link="backpack_url('membership')" />
</x-backpack::menu-dropdown>
<x-backpack::menu-dropdown title="Logs" icon="la la-history">
    <x-backpack::menu-dropdown-item title='System Logs' icon='la la-terminal' :link="backpack_url('log')" />
    <x-backpack::menu-dropdown-item title="Activity Logs" icon="la la-stream" :link="backpack_url('activity-log')" />
</x-backpack::menu-dropdown>
<x-backpack::menu-item title='Backups' icon='la la-hdd-o' :link="backpack_url('backup')" />
<x-backpack::menu-item title='Settings' icon='la la-cog' :link="backpack_url('setting')" />
<x-backpack::menu-dropdown title="Add-ons" icon="la la-puzzle-piece">
    <x-backpack::menu-dropdown-header title="Authentication" />
    <x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>

