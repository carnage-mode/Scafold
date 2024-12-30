{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Teams" icon="la la-question" :link="backpack_url('team')" />
<x-backpack::menu-item title="Team invitations" icon="la la-question" :link="backpack_url('team-invitation')" />
<x-backpack::menu-item title="Memberships" icon="la la-question" :link="backpack_url('membership')" />
<x-backpack::menu-item title='Logs' icon='la la-terminal' :link="backpack_url('log')" />
<x-backpack::menu-item title='Backups' icon='la la-hdd-o' :link="backpack_url('backup')" />
<x-backpack::menu-item title='Settings' icon='la la-cog' :link="backpack_url('setting')" />