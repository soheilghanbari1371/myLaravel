<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Http\Requests\TicketRequest;
use App\Ticket;
use App\Ticketchat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    //
    public function newTicket(Request $request)
    {
       return view('user_set_new_ticket');
    }

    public function setNewTicket(TicketRequest $request)
    {
        $new_ticket = new Ticket();
        $new_ticket->subject = $request->subject;
        $new_ticket->department = $request->department;
        $user = Auth::user();
        $user->tickets()->save($new_ticket);

        $new_ticket_chat = new Ticketchat();
        $new_ticket_chat->text = $request->text;
        $new_ticket->ticketchats()->save($new_ticket_chat);
        return back();

    }

    public function setNewTicketChat(Request $request)
    {

        $new_ticket_chat = new Ticketchat();
        $new_ticket_chat->text = $request->text;
        $ticket = Ticket::where('id',$request->ticket_id)->first();
        $ticket->ticketchats()->save($new_ticket_chat);
        return "ok";
    }

    public function ticketList()
    {
        $ticket_list = Auth::user()->tickets;
        return view('user_ticket_list',compact('ticket_list'));
    }

    public function ticketChatroom($id)
    {
        $ticket =  Auth::user()->tickets->where('id',$id)->first();
        $ticket_chats = Ticketchat::where('ticket_id',$id)->get();
        if(is_null($ticket)){

        }else{
            return view('user_ticket_detail',compact('ticket_chats','ticket'));

        }

    }
}
