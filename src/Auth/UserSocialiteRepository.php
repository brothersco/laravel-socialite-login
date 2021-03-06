<?php namespace Broco\SocialiteLogin\Auth;

class UserSocialiteRepository {

	public function findOrCreateUser($provider, $userData)
	{
		$provider_id = $userData->id;
		$usersocial = UserSocialite::firstOrNew(compact('provider','provider_id'));
		$usersocial->initializeOrUpdateIfNecessary($userData);
		return $usersocial->user;
	}

}
