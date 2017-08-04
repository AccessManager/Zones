<?php

namespace AccessManager\Zones\Http\Controllers;

use AccessManager\Base\Http\Controller\AdminBaseController;
use AccessManager\Zones\Http\Requests\ZoneAddEditRequest;
use AccessManager\Zones\Models\Zone;

class ZonesController extends AdminBaseController
{

    public function getIndex()
    {
        $zones = Zone::paginate('10');
        return view('Zones::index', compact('zones'));
    }

    public function getAdd()
    {
        return view('Zones::add-edit');
    }

    public function postAdd( ZoneAddEditRequest $request )
    {
        $zone = new Zone($request->all());
        if( $zone->save() )
        {
            $this->notifySuccess("New Zone Added.");
        } else {
            $this->notifyError("Failed to Add New Zone.");
        }
        return redirect()->route('zones.index');
    }

    public function getEdit( $id )
    {
        $zone = Zone::findOrFail($id);

        return view('Zones::add-edit', compact('zone'));
    }

    public function postEdit( ZoneAddEditRequest $request )
    {
        $zoneId = request('id', 0);
        $zone = Zone::findOrFail($zoneId);
        $zone->fill( $request->all() );

        if( $zone->save() ) {
            $this->notifySuccess("Zone Updated Successfully.");
        } else {
            $this->notifyError("Failed to Update Zone.");
        }
        return redirect()->route('zones.index');
    }

    public function postDelete()
    {
        $zoneId = request('id', 0);
        $zone = Zone::findOrFail($zoneId);

        if( $zone->delete() ) {
            $this->notifySuccess("Zone Deleted Successfully.");
        } else {
            $this->notifyError("Failed to Delete Zone.");
        }
        return redirect()->route('zones.index');
    }
}