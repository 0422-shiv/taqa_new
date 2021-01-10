from django.shortcuts import render,HttpResponse,HttpResponseRedirect,render
from django.views import generic
from django.utils.decorators import method_decorator
from django.contrib.auth.decorators import login_required
#for sentiment
import re 
import tweepy 
from tweepy import OAuthHandler 
from textblob import TextBlob 
# Create your views here.

#function for change number format
# @method_decorator(login_required, name="dispatch")
def human_format(num):
    magnitude = 0
    while abs(num) >= 1000:
        magnitude += 1
        num /= 1000.0
    # add more suffixes if you need them
    return '%.2f%s' % (num, ['', 'K', 'M', 'G', 'T', 'P'][magnitude])


@method_decorator(login_required, name="dispatch")
class sentimental_index(generic.TemplateView):
    template_name = 'twitter_sentiment/index.html'

    # def get(self,request):
    #     return HttpResponse("done")
    

# @method_decorator(login_required, name="dispatch")
class TwitterClient(object): 
    ''' 
    Generic Twitter Class for sentiment analysis. 
    '''
    def __init__(self): 
        ''' 
        Class constructor or initialization method. 
        '''
        # keys and tokens from the Twitter Dev Console 
        consumer_key = 'VO5oEImRCAGLm75FoL6iQ6xcI'
        consumer_secret = 'N1ZxBRFnmr5s4icPdAOyqTvpTFOs0Ir71ho20Q9VVBk3qV6kVN'
        access_token = '1338781544719077376-e4zL0FhB5k4iXIENxv6Ubt6topqbie'
        access_token_secret = 'OQEetdcTaqzQUSSkiYltbzsZZhMm6cJqIUEMOILg5vu2R'
  
        # attempt authentication 
        try: 
            # create OAuthHandler object 
            self.auth = OAuthHandler(consumer_key, consumer_secret) 
            # set access token and secret 
            self.auth.set_access_token(access_token, access_token_secret) 
            # create tweepy API object to fetch tweets 
            self.api = tweepy.API(self.auth) 
        except: 
            print("Error: Authentication Failed") 
  
    def clean_tweet(self, tweet): 
        ''' 
        Utility function to clean tweet text by removing links, special characters 
        using simple regex statements. 
        '''
        return ' '.join(re.sub("(@[A-Za-z0-9]+)|([^0-9A-Za-z \t]) |(\w+:\/\/\S+)", " ", tweet).split()) 
  
    def get_tweet_sentiment(self, tweet): 
        ''' 
        Utility function to classify sentiment of passed tweet 
        using textblob's sentiment method 
        '''
        # create TextBlob object of passed tweet text 
        analysis = TextBlob(self.clean_tweet(tweet)) 

        if analysis.sentiment.polarity > 0: 
            return 'positive'
        elif analysis.sentiment.polarity == 0: 
            return 'neutral'
        else: 
            return 'negative'
  
    def get_tweets(self,query,from_date,to_date,lang='en'): 
        ''' 
        Main function to fetch tweets and parse them. 
        '''
        # empty list to store parsed tweets 
        tweets = [] 
        max_tweets = 100

       
  
        try: 
            fetched_tweets = tweepy.Cursor(self.api.search,q=query,tweet_mode = 'extended',lang = lang,since=from_date, until = to_date,include_retweets=True ).items(max_tweets)

            for tweet in fetched_tweets: 

                parsed_tweet = {} 

                try:                 
                    
                    parsed_tweet['created_at'] = tweet.retweeted_status.created_at
                    parsed_tweet['id'] = tweet.retweeted_status.id
                    parsed_tweet['id_str'] = tweet.retweeted_status.id_str
                    parsed_tweet['source'] = tweet.retweeted_status.source
                    parsed_tweet['text'] = tweet.retweeted_status.full_text
                    parsed_tweet['user_name'] = tweet.retweeted_status.user.name
                    parsed_tweet['user_location'] = tweet.retweeted_status.user.location
                    parsed_tweet['verified'] = tweet.retweeted_status.user.verified
                    parsed_tweet['followers'] = tweet.retweeted_status.useruser.followers_count
                    parsed_tweet['retweet_count'] = tweet.retweeted_status.retweet_count
                    parsed_tweet['favorite_count'] = tweet.retweeted_status.favorite_count
                    parsed_tweet['in_reply_to_status_id'] =tweet.retweeted_status.in_reply_to_status_id
                    parsed_tweet['in_reply_to_status_id_str'] =tweet.retweeted_status.in_reply_to_status_id_str
                    parsed_tweet['in_reply_to_user_id'] =tweet.retweeted_status.in_reply_to_user_id
                    parsed_tweet['in_reply_to_user_id_str'] =tweet.retweeted_status.in_reply_to_user_id_str
                    parsed_tweet['in_reply_to_screen_name'] =tweet.retweeted_status.in_reply_to_screen_name
                    parsed_tweet['place'] =tweet.retweeted_status.place
                    parsed_tweet['is_quote_status'] =tweet.retweeted_status.is_quote_status
                    parsed_tweet['retweet_count'] =tweet.retweeted_status.retweet_count
                    parsed_tweet['favorite_count'] =tweet.retweeted_status.favorite_count
                    parsed_tweet['entities'] =tweet.retweeted_status.entities
                    parsed_tweet['favorited'] =tweet.retweeted_status.favorited
                    parsed_tweet['retweeted'] =tweet.retweeted_status.retweeted
                    parsed_tweet['lang'] =tweet.retweeted_status.lang
                    

                except AttributeError:  # Not a Retweet
                     
                    parsed_tweet['created_at'] = tweet.created_at
                    parsed_tweet['id'] = tweet.id
                    parsed_tweet['id_str'] = tweet.id_str
                    parsed_tweet['source'] = tweet.source
                    parsed_tweet['text'] = tweet.full_text
                    parsed_tweet['user_name'] = tweet.user.name
                    parsed_tweet['user_location'] = tweet.user.location
                    parsed_tweet['verified'] = tweet.user.verified
                    parsed_tweet['followers'] = tweet.user.followers_count
                    parsed_tweet['retweet_count'] = tweet.retweet_count
                    parsed_tweet['favorite_count'] = tweet.favorite_count
                    parsed_tweet['in_reply_to_status_id'] =tweet.in_reply_to_status_id
                    parsed_tweet['in_reply_to_status_id_str'] =tweet.in_reply_to_status_id_str
                    parsed_tweet['in_reply_to_user_id'] =tweet.in_reply_to_user_id
                    parsed_tweet['in_reply_to_user_id_str'] =tweet.in_reply_to_user_id_str
                    parsed_tweet['in_reply_to_screen_name'] =tweet.in_reply_to_screen_name
                    parsed_tweet['place'] =tweet.place
                    parsed_tweet['is_quote_status'] =tweet.is_quote_status
                    parsed_tweet['retweet_count'] =tweet.retweet_count
                    parsed_tweet['favorite_count'] =tweet.favorite_count
                    parsed_tweet['entities'] =tweet.entities
                    parsed_tweet['favorited'] =tweet.favorited
                    parsed_tweet['retweeted'] =tweet.retweeted
                    parsed_tweet['lang'] =tweet.lang


                # saving sentiment of tweet 
                try:                 
                    parsed_tweet['sentiment'] = self.get_tweet_sentiment(tweet.retweeted_status.full_text) 
                except AttributeError:  # Not a Retweet
                    parsed_tweet['sentiment'] = self.get_tweet_sentiment(tweet.full_text)
                  
                # appending parsed tweet to tweets list 
                if tweet.retweet_count > 0: 

                    if parsed_tweet not in tweets: 
                        tweets.append(parsed_tweet) 
                else: 
                    tweets.append(parsed_tweet) 

             
            return tweets 
  
        except tweepy.TweepError as e: 
            # print error (if any) 
            print("Error : " + str(e))


@method_decorator(login_required, name="dispatch")
class analyzing(generic.TemplateView):
    template_name = 'twitter_sentiment/sentiment_analysis_data.html'

    

    def post(self,request):

        query =  request.POST.get("query")
        From_Date = request.POST.get("From_Date")
        To_Date = request.POST.get("To_Date")
        lang =request.POST.get('RadioGroup1','off')
        
        
        contentdata = {}
        api = TwitterClient()

        tweets = api.get_tweets(query = query, lang = lang,from_date=From_Date,to_date =To_Date) 

        if len(tweets) > 0 :

            all_favorite_count = 0
            all_retweet_count = 0
            all_quote_count = 0
            most_engaged_tweets = []
            most_influencer_profile = []
            most_engaged_tweets_number = 0
            most_influencer_tweets_number = 0
            verified = 0
            unvarified = 0

            for tweet in tweets: 
                if tweet['favorite_count']+tweet['retweet_count'] > most_engaged_tweets_number:
                    most_engaged_tweets_number = tweet['favorite_count']+tweet['retweet_count']
                if tweet['followers'] > most_influencer_tweets_number:
                    most_influencer_tweets_number = tweet['followers']
                if tweet['verified']:
                    verified += 1 
                else:
                    unvarified += 1

            for tweet in tweets:  
                all_favorite_count = all_favorite_count + tweet['favorite_count']
                all_retweet_count = all_retweet_count + tweet['retweet_count']
                most_engaged_tweets = [tweet for tweet in tweets if tweet['favorite_count']+tweet['retweet_count'] >= most_engaged_tweets_number]
                most_influencer_profile = [tweet for tweet in tweets if  tweet['followers'] >= most_influencer_tweets_number]
            

            verify_percentage = (round(100*(verified))/len(tweets))
            unverify_percentage = (round(100*(unvarified))/len(tweets))

            print('the answer is %s' % human_format(all_retweet_count))  # prints 'the answer is 7.44M'

            contentdata['verify_percentage'] = verify_percentage
            contentdata['unverify_percentage'] = unverify_percentage
            contentdata['all_favorite_count'] = human_format(all_favorite_count)
            contentdata['all_retweet_count'] = human_format(all_retweet_count)
            contentdata['most_engaged_tweets'] = most_engaged_tweets
            contentdata['most_influencer_profile'] = most_influencer_profile
            
            ptweets = [tweet for tweet in tweets if tweet['sentiment'] == 'positive'] 
            ptweets2 = round(100*len(ptweets)/len(tweets))
            contentdata["ptweets2"] = ptweets2
        
            ntweets = [tweet for tweet in tweets if tweet['sentiment'] == 'negative'] 
            ntweets2 = round(100*len(ntweets)/len(tweets))
            contentdata["ntweets2"] = ntweets2
        
            nutweets = round(100*(len(tweets) -(len( ntweets )+len( ptweets)))/len(tweets))
            contentdata["nutweets"] = nutweets

            contentdata['sentiment_data'] = tweets

            

        else:
            pass

    
        return render(request,"twitter_sentiment/sentiment_analysis_data.html",contentdata)
        

@method_decorator(login_required, name="dispatch")
class example(generic.TemplateView):
    template_name = 'twitter_sentiment/example.html'
