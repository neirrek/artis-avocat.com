require 'rubygems'
require 'bundler'
Bundler.setup

require 'sinatra/base'
require 'sinatra/captcha'
require 'mail'

include Sinatra::Captcha

Mail.defaults do
  delivery_method :smtp, {
    :address => ENV['SMTP_HOST'],
    :port => ENV['SMTP_PORT'].to_i,
    :domain => ENV['SMTP_DOMAIN'],
    :user_name => ENV['SMTP_USER'],
    :password => ENV['SMTP_PASSWORD'],
    :authentication => 'plain',
    :enable_starttls_auto => true
  }
end

class Main < Sinatra::Base

  root_dir = File.dirname(__FILE__)

  set :views, "#{root_dir}/views"
  set :public, "#{root_dir}/public"
  set :app_file, File.join(root_dir, 'main.rb')

  enable :sessions

  get '/' do
    File.new('public/index.html').readlines
  end

  ['/beta', '/beta/'].each do |path|
    get path do
      show_page 'accueil'
    end
  end

  get "/beta/:page" do |page|
    show_page page
  end

  post '/beta/contact' do
    name = params[:name]
    email = params[:email]
    message = params[:message]
    session[:name] = name
    session[:email] = email
    session[:message] = message
    if captcha_pass?
      Mail.deliver do
        from email
        to ENV['MAIL_TO']
        subject 'Contact from Artis-avocat.com'
        body "From: #{name}\n\nEmail: #{email}\n\nMessage: #{message}"
      end
      session[:mailsent] = true
      session[:name] = ''
      session[:email] = ''
      session[:message] = ''
    else
      session[:mailsent] = false
    end
    show_page 'contact'
  end

  not_found do
    show_page '404', {:layout => false}
  end

  def show_page(page, options = {}, locals = {})
    begin
      session[:page] = page
      erb :"#{page}.html", options, locals
    rescue Errno::ENOENT
      halt 404
    end
  end

end