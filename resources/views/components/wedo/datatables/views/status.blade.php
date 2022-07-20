@if($row->status === 'pending')

    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
      <svg class="-ml-1 mr-1.5 h-2 w-2 text-yellow-400" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
      </svg>
      {{__('Pending')}}
    </span>

@elseif ($row->status === 'approved')
    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
      <svg class="-ml-1 mr-1.5 h-2 w-2 text-green-400" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
      </svg>
      {{__('Approved')}}
    </span>
@elseif ($row->status === 'rejected')
    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-rose-100 text-rose-800">
      <svg class="-ml-1 mr-1.5 h-2 w-2 text-rose-400" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
      </svg>
      {{__('Rejected')}}
    </span>
@endif
