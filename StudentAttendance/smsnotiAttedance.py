

from twilio.rest import Client

# Your Account SID from twilio.com/console
account_sid = "AC7a95ee3c685682ff676f7e3f43f60b11"
# Your Auth Token from twilio.com/console
auth_token  = "3a7b4d41a68c4f421f71598910cd6913"

client = Client(account_sid, auth_token)

message = client.messages.create(
    to="+9140356115",
    from_="+12108719385",
    body="Hello from Python!")

print(message.sid)