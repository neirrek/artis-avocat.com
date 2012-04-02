require 'rubygems'
require 'bundler'
Bundler.setup

require 'sinatra/base'

class Main < Sinatra::Base

  root_dir = File.dirname(__FILE__)

  set :views, "#{root_dir}/views"
  set :public, "#{root_dir}/public"
  set :app_file, File.join(root_dir, 'main.rb')

  get '/' do
    erb :'index.html'
  end

end