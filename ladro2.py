from telethon import TelegramClient, sync
from telethon.tl.functions.messages import *
from telethon.tl.functions.channels import *
from telethon.tl.functions.contacts import *
from telethon.tl.functions.users import *
from telethon.tl.types import *
from telethon.errors import *
import sys, os
import datetime
import time

numero = input("Inserisci numero: ")

client = TelegramClient(
    numero,
    21724,
    '3e0cb5efcd52300aec5994fdfc5bdc16',
    proxy=None
)
client.connect()
if not client.is_user_authorized():
	client.send_code_request(numero)
	client.sign_in(code=input('Codice: '))
dove_addare = input('In che gruppo vuoi aggiungere i membri: ')
dove_rubare = input('Da che gruppo vuoi rubare i membri: ')
j = client(ResolveUsernameRequest(username=dove_rubare))
i = j.peer
d = client(ImportChatInviteRequest(hash=dove_addare))
k = d.chats[0].id
pre = client(GetParticipantsRequest(channel=i,filter=ChannelParticipantsRecent(),offset=0,hash=0,limit=500))
membri = pre.users
for membro in membri:
	try:
		if not membro.bot:
			client(InviteToChannelRequest(channel=PeerChannel(channel_id=k),users=[membro.id]))
	except Exception as e:
		print('Errore durante aggiungimento di '+str(membro.id)+' : '+str(e))
client(LeaveChannelRequest(channel=PeerChannel(channel_id=k)))
print('Terminato.')